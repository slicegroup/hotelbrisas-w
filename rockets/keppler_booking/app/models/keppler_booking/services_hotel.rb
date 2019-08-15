# frozen_string_literal: true

module KepplerBooking
  # ServicesHotel Model
  class ServicesHotel < ApplicationRecord
    include ActivityHistory
    include CloneRecord
    include Uploadable
    include Downloadable
    include Sortable
    include Searchable
    acts_as_list
    acts_as_paranoid
    validates_presence_of :name, :icon, :description

    def self.index_attributes
      %i[name icon]
    end
  end
end
