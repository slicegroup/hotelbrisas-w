# frozen_string_literal: true

module KepplerBooking
  # Reservation Model
  class Reservation < ApplicationRecord
    include ActivityHistory
    include CloneRecord
    include Uploadable
    include Downloadable
    include Sortable
    include Searchable
    acts_as_list
    acts_as_paranoid
    has_many :orders, :dependent => :destroy
    validates :email, presence: true, format: { with: /@/ }
    validates_presence_of :adults, :documentation, :checkin, :checkout, :name, :email, :kids, :phone
    accepts_nested_attributes_for :orders, :reject_if => :all_blank, :allow_destroy => true


    def self.index_attributes
      %i[name email origin motive]
    end
  end
end
