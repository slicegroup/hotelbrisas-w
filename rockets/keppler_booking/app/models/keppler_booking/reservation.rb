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

    accepts_nested_attributes_for :orders, :reject_if => :all_blank, :allow_destroy => true


    def self.index_attributes
      %i[name email origin motive]
    end
  end
end
